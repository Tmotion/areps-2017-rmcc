<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

abstract class Request extends FormRequest
{
    protected $result;

    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
            $this->messageBag = new \Illuminate\Support\MessageBag();
            $this->messageBag->add('validation', $errors);

            $bags = $this->messageBag->getMessageBag()->toArray();
            foreach ($bags['validation'] as $validates) {
                foreach ($validates as $field => $message) {
                    $this->result['error']['validation'][$field] = $message;
                }
            }

            return \Response::json($this->result, 422);
    }
}
