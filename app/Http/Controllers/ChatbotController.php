<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $message = json_decode($request->getContent(), true)['message'] ?? 'Xin chào';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->withOptions([
            'verify' => false
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4o-mini',
            'store' => true,
            'messages' => [
                ['role' => 'system', 'content' => 'Bạn là một trợ lý thân thiện của thẩm mỹ viện Venesa.'],
                ['role' => 'user', 'content' => $message],
            ],
            'temperature' => 0.7,
        ]);

        $json = $response->json();

        // Kiểm tra xem có key choices không
        if (isset($json['choices'][0]['message']['content'])) {
            return response()->json([
                'reply' => $json['choices'][0]['message']['content']
            ]);
        } else {
            // Trả lỗi từ OpenAI nếu có
            return response()->json([
                'reply' => $json['error']['message'] ?? 'Không thể lấy phản hồi từ OpenAI.'
            ], 500);
        }
    }
}