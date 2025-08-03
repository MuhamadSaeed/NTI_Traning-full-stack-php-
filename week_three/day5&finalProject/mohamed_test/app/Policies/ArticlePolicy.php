<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;

class ArticlePolicy
{
    // تحديث المقال
    public function update(User $user, Article $article)
    {
        return $user->id === $article->user_id;
    }

    // حذف المقال
    public function delete(User $user, Article $article)
    {
        return $user->id === $article->user_id;
    }
}
