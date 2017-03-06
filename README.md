# FuelPostcodeIO

**Retrieve postcode data via postcodes.io**

## Simple postcode lookup example

```php
    try {
        $postcodeIO = new \FuelPostcodeIO();
        $result = $postcodeIO->lookup("CV21 3BH");
        
        // Do something with result
        $postcode = $result->result->postcode;
    } catch (\RequestException $e) {
        $message = json_decode($e->getMessage());
        \Log::error($message->error, __METHOD__);
    }
```