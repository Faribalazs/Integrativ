<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Browser;

class Tracker extends Model
{
    use HasFactory;

    protected $fillable = ['ip', 'visit_date', 'device', 'browser', 'visit_time', 'hits'];

    public $timestamps = false;

    protected $table = 'tracker';

    public static function hit() {
        try {

            // Call method to delete records older than 40 days
            self::deleteOldRecords();
            
            $deviceType = 'unknown';

            if (Browser::isMobile()) {
                $deviceType = 'mobile';
            } elseif (Browser::isTablet()) {
                $deviceType = 'tablet';
            } elseif (Browser::isDesktop()) {
                $deviceType = 'desktop';
            } elseif (Browser::isBot()) {
                $deviceType = 'bot';
            }

            $browserType = 'unknown';

            if (Browser::isChrome()) {
                $browserType = 'chrome';
            } elseif (Browser::isFirefox()) {
                $browserType = 'firefox';
            } elseif (Browser::isOpera()) {
                $browserType = 'opera';
            } elseif (Browser::isSafari()) {
                $browserType = 'safari';
            } elseif (Browser::isIE()) {
                $browserType = 'ie';
            } elseif (Browser::isEdge()) {
                $browserType = 'edge';
            }

            $tracker = new static([
                'ip' => request()->ip() ?? '0.0.0.0',
                'visit_date' => date('Y-m-d'),
                'visit_time' => date('H:i:s'),
                'device' => $deviceType,
                'browser' => $browserType,
                'hits' => 1,
            ]);

            $tracker->save();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id')->select('first_name','last_name');
    }

    // Method to get today's visits statistics
    public static function getTodaysVisits()
    {
        return static::where('visit_date', date('Y-m-d'))->get();
    }

    // Method to get the last 30 days visits statistics
    public static function getLast30DaysVisits()
    {
        return static::where('visit_date', '>=', now()->subDays(30)->startOfDay()->format('Y-m-d'))->get();
    }

    // Method to delete records older than 40 days
    public static function deleteOldRecords()
    {
        static::where('visit_date', '<', now()->subDays(40)->startOfDay()->format('Y-m-d'))->delete();
    }
}