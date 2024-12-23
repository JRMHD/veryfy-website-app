<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenya Water Company - Water Bill</title>
    <style>
        :root {
            --primary-color: #073F62;
            --secondary-color: #00A550;
            --accent-color: #f8f9fa;
            --border-color: #e9ecef;
        }

        @page {
            margin: 0cm 0cm;
        }


        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 2cm;
            padding: 40px;
            color: #333;
            background-color: #fff;
        }

        .bill-container {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: var(--primary-color);
            color: white;
            padding: 30px;
            border-radius: 12px 12px 0 0;
            position: relative;
        }

        .logo-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .company-name {
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }

        .bill-title {
            color: var(--secondary-color);
            font-size: 20px;
            margin: 0;
        }

        .watermark {
            position: fixed;
            top: 50%;
            font-weight: bold;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 70px;
            color: rgba(0, 0, 0, 0.1);
            text-align: center;
            z-index: -1;
            pointer-events: none;
        }

        .bill-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            background-color: var(--accent-color);
            padding: 20px 30px;
            border-bottom: 1px solid var(--border-color);
        }

        .bill-info div {
            display: flex;
            flex-direction: column;
        }

        .label {
            font-size: 12px;
            color: #666;
            margin-bottom: 4px;
        }

        .value {
            font-size: 16px;
            font-weight: 500;
        }

        .details {
            padding: 30px;
        }

        .section-title {
            color: var(--primary-color);
            font-size: 18px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--secondary-color);
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .meter-readings {
            margin-top: 30px;
            background-color: var(--accent-color);
            padding: 20px;
            border-radius: 8px;
        }

        .readings-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 15px;
        }

        .total-section {
            margin-top: 30px;
            padding: 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-amount {
            font-size: 24px;
            font-weight: bold;
        }

        .due-date {
            color: var(--secondary-color);
            font-weight: bold;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            padding: 20px 30px;
            background-color: var(--accent-color);
            border-radius: 0 0 12px 12px;
            font-size: 14px;
            color: #666;
        }

        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            .details-grid,
            .readings-grid {
                grid-template-columns: 1fr;
            }

            .bill-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    @if (isset($watermark))
        <div class="watermark">{{ $watermark }}</div>
    @endif

    <div class="bill-container">
        <div class="header">
            <div class="logo-section">
                <div>
                    <h1 class="company-name">Kenya Water Company</h1>
                    <p class="bill-title">Water Bill Statement</p>
                </div>
                <div class="bill-number">
                    <div class="label">Account Number</div>
                    <div class="value">{{ $data['account_number'] }}</div>
                </div>
            </div>
        </div>

        <div class="bill-info">
            <div>
                <span class="label">Bill Date</span>
                <span class="value">{{ $data['date_of_issue'] }}</span>
            </div>
            <div>
                <span class="label">Due Date</span>
                <span class="value">{{ $data['date_due'] }}</span>
            </div>
        </div>

        <div class="details">
            <h2 class="section-title">Customer Information</h2>
            <div class="details-grid">
                <div>
                    <span class="label">Full Name</span>
                    <span class="value">{{ $data['full_names'] }}</span>
                </div>
                <div>
                    <span class="label">Phone Number</span>
                    <span class="value">{{ $data['phone'] }}</span>
                </div>
                <div>
                    <span class="label">Address</span>
                    <span class="value">{{ $data['address'] }}</span>
                </div>
                <div>
                    <span class="label">City</span>
                    <span class="value">{{ $data['city'] }}</span>
                </div>
                <div>
                    <span class="label">State/Province</span>
                    <span class="value">{{ $data['state'] }}</span>
                </div>
                <div>
                    <span class="label">Zip Code</span>
                    <span class="value">{{ $data['zipcode'] }}</span>
                </div>
            </div>

            <div class="meter-readings">
                <h2 class="section-title">Consumption Details</h2>
                <div class="readings-grid">
                    <div>
                        <span class="label">Meter Number</span>
                        <span class="value">{{ $data['meter_number'] }}</span>
                    </div>
                    <div>
                        <span class="label">Previous Reading</span>
                        <span class="value">{{ $data['previous_reading'] }}</span>
                    </div>
                    <div>
                        <span class="label">Current Reading</span>
                        <span class="value">{{ $data['current_reading'] }}</span>
                    </div>
                    <div>
                        <span class="label">Consumption</span>
                        <span class="value">{{ $data['consumption'] }}</span>
                    </div>
                    <div>
                        <span class="label">Consumption Type</span>
                        <span class="value">{{ $data['consumption_type'] }}</span>
                    </div>
                    <div>
                        <span class="label">Period</span>
                        <span class="value">{{ $data['consumption_period'] }}</span>
                    </div>
                </div>
            </div>

            <div class="total-section">
                <div>
                    <div class="label">Total Amount Due</div>
                    <div class="total-amount">KES {{ $data['total_amount'] }}</div>
                </div>
                <div class="due-date">
                    Due by {{ $data['date_due'] }}
                </div>
            </div>
        </div>

        <div class="footer">
            <p>Kenya Water Company - Providing Clean Water for a Better Future</p>
            <p>For inquiries: +254 (0) 20 XXX XXXX | support@kenyawater.co.ke</p>
            <p>P.O. Box XXXXX-00100, Nairobi, Kenya</p>
        </div>
    </div>
</body>

</html>
