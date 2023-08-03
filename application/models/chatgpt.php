<?php
defined("BASEPATH") or exit("No direct script access allowed");

use Orhanerday\OpenAi\OpenAi;

class chatgpt extends CI_Model
{
    public function chatApi($userQuery)
    {
        $open_ai_key = "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";

        $open_ai = new OpenAi($open_ai_key);

        $question = ["role" => "user", "content" => $userQuery];

        $chat = $open_ai->chat([
            "model" => "gpt-3.5-turbo",
            "messages" => [$question],
            "temperature" => 1.0,
            "max_tokens" => 4000,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
        ]);

        $returnedResponse = json_decode($chat);
        if (isset($returnedResponse->choices[0]->message->content)) {
            return $returnedResponse->choices[0]->message->content;
        } elseif (isset($returnedResponse->error->message)) {
            log_message("error", $returnedResponse->error->message);
            return $returnedResponse->error->message;
        }
    }
}
