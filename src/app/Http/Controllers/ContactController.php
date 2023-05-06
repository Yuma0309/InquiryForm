<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Services\ContactServiceInterface;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    protected $contactService;

    /**
     * ContactControllerのコンストラクタ
     *
     * @param ContactServiceInterface $contactService
     */
    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }
    
    /**
     * お問い合わせ内容保存画面
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function inquiry(Request $request)
    {
        $contacts = $this->contactService->getDepartmentNames();

        return view('contacts.inquiry', compact('contacts'));
    }

    /**
     * お問い合わせ内容保存処理
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $request)
    {
        DB::transaction(function () use ($request) {
            $this->contactService->createContact(
                (int) $request->department_id,
                $request->name,
                $request->email,
                $request->content,
                (int) $request->age,
                (int) $request->gender,
            );
        });

        return redirect('index');
    }

    /**
     * お問い合わせ内容一覧画面
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $contacts = $this->contactService->getAll();
        
        return view('contacts.index', compact('contacts'));
    }
}
