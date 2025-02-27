<?php

namespace App\Jobs\Tenant;

use App\Models\Tenant as Tenants;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use LaravelEnso\Companies\Models\Company;

// use LaravelEnso\Multitenancy\Traits\TenantResolver;

class CreateDB implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private readonly Company $tenant)
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tenant = Tenants::create([
            'id' => $this->tenant->id,
        ]);

        //
        // Tenant::set($this->tenant);
        // DB::statement('CREATE DATABASE '.$this->tenantDatabase());
    }
}
