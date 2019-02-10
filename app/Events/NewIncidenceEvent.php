<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class NewIncidenceEvent implements ShouldBroadcastNow

{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $incidence;

    public function __construct(Incdence $incidence)
    {
        $this->incidence = $incidence;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new channel('Lga.'.$this->incidence->pollingUnitIncidence->pollingUnit->ward->lga->id);
    }

    public function broadcastWith()
    {
        return [
            'pollingUnit'=> $this->incidence->pollingUnitIncidence->pollingUnit->name,
            'ward' => $this->incidence->pollingUnitIncidence->pollingUnit->ward->name,
            'incidence' => $this->incidence->name,
            'time'=> $this->incidence->created_at->formattedDateString()
        ]
    }
}
