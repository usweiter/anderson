<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Services\FeedbackServiceInterface;
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller
{
    /**
     * @var FeedbackServiceInterface
     */
    public $feedbackService;

    public function __construct(FeedbackServiceInterface $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }

    public function index()
    {
        $feedbacks = $this->feedbackService->getFeedbacks();
        return view('feedback.index', compact('feedbacks'));
    }

    /**
     *
     * @param FeedbackRequest $request
     * @return RedirectResponse
     */
    public function store(FeedbackRequest $request): RedirectResponse
    {
        $this->feedbackService->store($request);
        return redirect()->route('home');
    }
}
