<?php
namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DepositOffer extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'offers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'real_cash',
            'pass_type',
            'passes',
            'total_passes',
            'match_id',
            'contest_entry',
            'contest_entry_id',
            'deposit_amount',
            'offer_start_date',
            'offer_end_date',
            'status',
            'validity',
            'bonus',
            'extra_cash',
            'coupon_code',
            'created_at',
            'updated_at'
        ];
}