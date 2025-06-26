<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportExpressionData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-expression-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = json_decode(file_get_contents(storage_path('app/gse2034_expression.json')), true);

        foreach ($data as $record)
        {
            $gene = \App\Models\Gene::firstOrCreate([
                'probe_id' => $record['ID_REF']
            ]);

            foreach ($record as $gsm => $value)
            {
                if ($gsm === 'ID_REF') continue;

                $sample = \App\Models\Sample::firstOrCreate([
                    'gsm_id' => $gsm
                ]);

                $expression = \App\Models\Expression::create([
                    'gene_id' => $gene->id,
                    'sample_id' => $sample->id,
                    'expression_value' => $value
                ]);
            }
        }
    }
}
