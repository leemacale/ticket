<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Refund Page</title>
<style>
  /* Basic reset and font setup */
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  /* Header container styling */
  .container {
    display: flex;
    align-items: center;
    background-color: black;
    color: white;
    padding: 0.5rem;
  }

  /* Style for individual items within the header */
  .container-item {
    text-align: center;
    font-weight: bold;
    padding: 1rem 2rem;
    font-size: 1rem;
    transition: background-color 0.3s, color 0.3s;
  }

  /* Left spacing for the first item */
  .container-item:first-child {
    margin-left: 1rem;
  }

  /* Hover effect on items */
  .container-item:hover {
    background-color: red;
    color: white;
  }

  /* Divider style between items */
  .divider {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 0.5rem;
  }

  .divider-line {
    width: 1px;
    height: 60px;
    background-color: white;
  }

  /* Flex container for cancel section on the right */
  .cancel-container {
    display: flex;
    align-items: center;
    margin-left: auto;
  }

  /* Main content layout */
  .content {
    display: flex;
    padding: 2rem;
    font-size: 1.2rem;
  }

  /* Sections within the content */
  .left-section,
  .right-section {
    flex: 1;
    padding: 1rem;
  }

  /* Text alignment */
  .left-section {
    text-align: justify;
  }

  .right-section {
    text-align: left;
  }

  /* List style for refund rules */
  .refund-rules {
    margin-top: 1rem;
    padding-left: 1rem;
    font-size: 1rem;
    line-height: 1.6;
  }

  /* Input field for referral number */
  .referral-input {
    width: 453.39px;
    height: 47.23px;
    margin-top: 0.5rem;
    padding: 0.5rem;
    font-size: 1rem;
    box-sizing: border-box;
  }

  /* Radio button options style */
  .radio-options {
    margin-top: 0.5rem;
    font-size: 1rem;
  }

  /* Each radio option is placed on a new line with margin */
  .radio-option {
    margin-top: 0.8rem;
    display: block;
  }
</style>
</head>
<body>

<div class="container">
  <div class="container-item">Refund</div>

  <div class="divider">
    <div class="divider-line"></div>
  </div>

  <div class="cancel-container">
    <div class="divider">
      <div class="divider-line"></div>
    </div>
    <div class="container-item" onclick="window.history.back()">Cancel</div>
  </div>
</div>

<div class="content">
  <div class="left-section">
    <p>Refunds usually take some time to process, and the timeframe can vary depending on factors such as the payment
       method used and TicketWise Bus internal processing procedures. Expect to wait a certain period before seeing the refunded
       amount reflected in your accounts.</p>

    <p><strong>Rules of Refund:</strong></p>
    <ul class="refund-rules">
      <li>More than 14 days before the scheduled departure: Full refund minus a small processing fee.</li>
      <li>7 to 14 days before the scheduled departure: 50% refund.</li>
      <li>Less than 7 days before the scheduled departure: No refund.</li>
      <li>More than 14 days before the scheduled departure: No fee for rescheduling.</li>
      <li>7 to 14 days before the scheduled departure: 20% rescheduling fee.</li>
      <li>Less than 7 days before the scheduled departure: 50% rescheduling fee.</li>
      <li>If you do not show up for the scheduled departure without prior notice, no refund or rescheduling will be available.</li>
      <li>More than 7 days before the scheduled departure: No fee for changing passenger names or details.</li>
      <li>Less than 7 days before the scheduled departure: 50 PHP fee per change.</li>
      <li>If the trip is terminated earlier than planned by the customer, no refund will be issued for the unused portion of the service.</li>
    </ul>
  </div>

  <div class="right-section">
    <p><strong>Enter Referral Number</strong></p>
    <input type="text" class="referral-input" placeholder="Enter referral number here">

    <p><strong>Reason of Cancellation</strong></p>
    <div class="radio-options">
      <label class="radio-option">
        <input type="radio" name="cancellation-reason" value="personal-reasons">
        Booking Created by Mistakes
      </label>
      <label class="radio-option">
        <input type="radio" name="cancellation-reason" value="medical-emergency">
        Wrong Booking Information (passenger details included)
      </label>
      <label class="radio-option">
        <input type="radio" name="cancellation-reason" value="change-of-plans">
        Change of Mind
      </label>
      <label class="radio-option">
        <input type="radio" name="cancellation-reason" value="other">
        Changed of Schedule
      </label>
      <label class="radio-option">
        <input type="radio" name="cancellation-reason" value="other">
        Changed of Route
      </label>
      <label class="radio-option">
        <input type="radio" name="cancellation-reason" value="other">
        Unable to use a discount
      </label>
      <label class="radio-option">
        <input type="radio" name="cancellation-reason" value="other">
        Others
      </label>
      <input type="text" class="referral-input" placeholder="Please specify">

    </div>
  </div>
</div>

</body>
</html>
