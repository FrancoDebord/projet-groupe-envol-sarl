<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InscriptionClientService extends Model
{
    use HasFactory;

    protected $table="inscriptions_clients_services";

    protected $guarded = ["created_at","updated_at"];

    /**
     * Get the clientServiceConcerne that owns the InscriptionClientService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientServiceConcerne(): BelongsTo
    {
        return $this->belongsTo(ClientService::class, 'client_id', 'id');
    }

    /**
     * Get the consentementSigne that owns the InscriptionClientService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consentementSigne(): BelongsTo
    {
        return $this->belongsTo(ConsentementSigne::class, 'consentement_signe_id', 'id');
    }

    /**
     * Get the noteInformationLue that owns the InscriptionClientService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function noteInformationLue(): BelongsTo
    {
        return $this->belongsTo(NoteInformationLue::class, 'note_information_id', 'id');
    }

    /**
     * Get the serviceConcerne that owns the InscriptionClientService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function serviceConcerne(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
