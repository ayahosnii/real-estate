<!-- resources/views/apartment_listing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment Listing</title>
</head>
<body>
<h1>Modern House Details</h1>

<ul>
    <li><strong>Number of bed Rooms:</strong> {{ $modernHouse->getRooms()->getbedRoom()->getNumber() }}</li>
    <li><strong>Number of Living Rooms:</strong> {{ $modernHouse->getRooms()->getLivingRoom()->getNumber() }}</li>
    </ul>
<ul>
    <li><strong>Has Swimming Pool:</strong> {{ $modernHouse->getFeatures()->hasSwimmingPool() ? 'Yes' : 'No' }}</li>
    <li><strong>Has Garden:</strong> {{ $modernHouse->getFeatures()->hasGarden() ? 'Yes' : 'No' }}</li>
    <li><strong>Has Parking:</strong> {{ $modernHouse->getFeatures()->hasParking() ? 'Yes' : 'No' }}</li>
</ul>
<ul>
    <li><strong>Total Area:</strong> {{ $modernHouse->getHouseInformation()->getTotalArea() }} square meters</li>
    <li><strong>Total Area:</strong> {{ $modernHouse->getHouseInformation()->isContractReady() ? 'Yes' : 'No' }} </li>
    <li><strong>Total Area:</strong> {{ $modernHouse->getHouseInformation()->getPaymentProcess() }} </li>
    <li><strong>Total Area:</strong> {{ $modernHouse->getHouseInformation()->isUnderControl24x7() ? 'Yes' : 'No' }} </li>
</ul>
<ul>

</ul>
</body>
</html>
