<?php
    namespace App\Models;

    use Luna\Db\Model;

    class Log extends Model {
        const UPDATED_AT = null;
        
        protected $fillable = ["code", "message", "public_id"];
        public $timestamps = ["created_at"];
    }