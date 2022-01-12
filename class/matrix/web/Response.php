<?php //>

namespace matrix\web;

use matrix\utility\ValueObject;

class Response {

    use ValueObject;

    public function send() {
        $content = $this->content();
        $headers = $this->headers() ?: [];
        $status = $this->status() ?: 200;

        if (strlen($content)) {
            return response($content, $status, $headers);
        }

        $data = $this->json();

        if ($data !== null) {
            return response()->json($data, $status, $headers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }

        $path = $this->file();

        if ($path) {
            return response()->file($path, $headers);
        }

        $location = $this->redirect();

        if ($location) {
            if (!preg_match('/^https?:\/\//', $location)) {
                $location = get_url($location);
            }

            return redirect($location, 302, $headers);
        }
    }

}
