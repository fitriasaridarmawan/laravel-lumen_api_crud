<?php
namespace App;
use illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = [
        'name', 'email', 'github', 'twitter', 'location', 'latest_article_published'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
?>
