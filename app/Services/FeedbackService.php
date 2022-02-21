<?php
namespace App\Services;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Collection;

class FeedbackService implements FeedbackServiceInterface {
    /**
     * Return all feedbacks
     * @return Collection
     */
    public function getFeedbacks(): Collection{
        return Feedback::all();
    }

    /**
     * @param FeedbackRequest $request
     */
    public function store(FeedbackRequest $request): void
    {
        Feedback::create($request->validated());
    }
}
