<?php

// Interface for each stage of the pipeline
interface PipelineStage
{
    public function process($payload);
}

// The main pipeline class that will pass the payload through all stages
class Pipeline
{
    protected $stages = [];

    // Method to add a stage to the pipeline
    public function pipe(PipelineStage $stage)
    {
        $this->stages[] = $stage;
        return $this;
    }

    // Executes the pipeline stages sequentially
    public function process($payload)
    {
        foreach ($this->stages as $stage) {
            $payload = $stage->process($payload);
        }
        return $payload;
    }
}

// Example stage: User Authentication
class AuthenticateStage implements PipelineStage
{
    public function process($payload)
    {
        // Authentication logic
        if (!isset($payload['user'])) {
            throw new Exception('Authentication failed.');
        }
        echo "User authenticated\n";
        return $payload;
    }
}

// Example stage: Data Validation
class ValidateDataStage implements PipelineStage
{
    public function process($payload)
    {
        // Data validation logic
        if (empty($payload['data'])) {
            throw new Exception('Data validation failed.');
        }
        echo "Data validated\n";
        return $payload;
    }
}

// Example stage: Main Business Logic
class BusinessLogicStage implements PipelineStage
{
    public function process($payload)
    {
        // Core business logic
        echo "Business logic executed\n";
        return $payload;
    }
}

// Example stage: Response Generation
class ResponseStage implements PipelineStage
{
    public function process($payload)
    {
        // Response generation logic
        $payload['response'] = 'Response generated successfully!';
        echo "Response generated\n";
        return $payload;
    }
}

// Usage of the pipeline
$payload = [
    'user' => 'JohnDoe',
    'data' => ['key' => 'value']
];

$pipeline = new Pipeline();
$pipeline
    ->pipe(new AuthenticateStage())
    ->pipe(new ValidateDataStage())
    ->pipe(new BusinessLogicStage())
    ->pipe(new ResponseStage());

$result = $pipeline->process($payload);

echo $result['response'];  // Output: Response generated successfully!
