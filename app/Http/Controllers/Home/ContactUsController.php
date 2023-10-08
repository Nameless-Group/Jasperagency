<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Home\Contact\StoreRequest;
use App\Models\Home\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ContactUsController extends Controller
{
    /**
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        Contact::query()->create($data);
        return response()->json([
            'message' => 'Your message submitted successfully!'
        ], 204);
    }
}
