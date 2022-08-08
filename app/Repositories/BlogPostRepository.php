<?php

namespace App\Repositories;

use App\Models\Blog\BlogPost as Model;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogPostRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    /**
     * @param int|null $countPage
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate(int $countPage = null)
    {
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id',
        ];

        $result = $this->startConditions()
                       ->select($columns)
                       ->orderBy('id', 'DESC')
                       ->paginate($countPage);
        return $result;
    }
}