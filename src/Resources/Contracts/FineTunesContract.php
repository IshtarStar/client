<?php

namespace OpenAI\Resources\Contracts;

use OpenAI\Responses\FineTunes\ListEventsResponse;
use OpenAI\Responses\FineTunes\ListResponse;
use OpenAI\Responses\FineTunes\RetrieveResponse;

interface FineTunesContract
{
    /**
     * Creates a job that fine-tunes a specified model from a given dataset.
     *
     * Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.
     *
     * @see https://beta.openai.com/docs/api-reference/fine-tunes/create
     *
     * @param  array<string, mixed>  $parameters
     */
    public function create(array $parameters): RetrieveResponse;

    /**
     * List your organization's fine-tuning jobs.
     *
     * @see https://beta.openai.com/docs/api-reference/fine-tunes/list
     */
    public function list(): ListResponse;

    /**
     * Gets info about the fine-tune job.
     *
     * @see https://beta.openai.com/docs/api-reference/fine-tunes/list
     */
    public function retrieve(string $fineTuneId): RetrieveResponse;

    /**
     * Immediately cancel a fine-tune job.
     *
     * @see https://beta.openai.com/docs/api-reference/fine-tunes/cancel
     */
    public function cancel(string $fineTuneId): RetrieveResponse;

    /**
     * Get fine-grained status updates for a fine-tune job.
     *
     * @see https://beta.openai.com/docs/api-reference/fine-tunes/events
     */
    public function listEvents(string $fineTuneId): ListEventsResponse;
}