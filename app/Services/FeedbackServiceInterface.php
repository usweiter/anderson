<?php
namespace App\Services;

use App\Http\Requests\FeedbackRequest;
use Illuminate\Database\Eloquent\Collection;

interface FeedbackServiceInterface{
    public function getFeedbacks(): Collection;
    public function store(FeedbackRequest $request): void;
}
