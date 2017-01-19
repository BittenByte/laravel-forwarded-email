<?php

namespace BittenByte\LaravelForwardedEmail;

use Illuminate\Database\Eloquent\Model;

class ForwardedEmail extends Model
{
    /**
     * The table related to this model.
     * 
     * @var string
     */
    protected $table = 'forwarded_emails';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
