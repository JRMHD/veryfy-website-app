<!DOCTYPE html>
<html>

<head>
    <title>Power Bill - Kenya Panel Lighting Company</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 40px;
        }

        .header {
            border-bottom: 2px solid #073F62;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .company-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .company-name {
            color: #073F62;
            font-size: 24px;
            font-weight: bold;
        }

        .bill-title {
            background-color: #073F62;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .bill-sections {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            color: #00A550;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            border-bottom: 2px solid #00A550;
            padding-bottom: 5px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            border-bottom: 1px dashed #ddd;
            padding-bottom: 5px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #333;
        }

        .total-amount {
            background-color: #00A550;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: right;
            margin-top: 20px;
        }

        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #073F62;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="company-info">
                <div class="company-name">
                    Kenya Panel Lighting Company
                </div>
                <div class="bill-title">
                    ELECTRICITY BILL
                </div>
            </div>
        </div>

        <div class="bill-sections">
            <div class="section">
                <div class="section-title">Customer Information</div>
                <div class="info-row">
                    <span class="label">Account Number:</span>
                    <span class="value">{{ $data['account_number'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Full Names:</span>
                    <span class="value">{{ $data['full_names'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Address:</span>
                    <span class="value">{{ $data['address'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">City:</span>
                    <span class="value">{{ $data['city'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">State:</span>
                    <span class="value">{{ $data['state'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Zipcode:</span>
                    <span class="value">{{ $data['zipcode'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Phone:</span>
                    <span class="value">{{ $data['phone'] ?? 'N/A' }}</span>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Meter Details</div>
                <div class="info-row">
                    <span class="label">Meter Number:</span>
                    <span class="value">{{ $data['meter_number'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Previous Reading:</span>
                    <span class="value">{{ $data['previous_reading'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Current Reading:</span>
                    <span class="value">{{ $data['current_reading'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Consumption Type:</span>
                    <span class="value">{{ $data['consumption_type'] ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Consumption Period:</span>
                    <span class="value">{{ $data['consumption_period'] ?? 'N/A' }}</span>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Payment Information</div>
            <div class="info-row">
                <span class="label">Date of Issue:</span>
                <span class="value">{{ $data['date_of_issue'] ?? 'N/A' }}</span>
            </div>
            <div class="info-row">
                <span class="label">Due Date:</span>
                <span class="value">{{ $data['date_due'] ?? 'N/A' }}</span>
            </div>
            <div class="total-amount">
                <span class="label">Total Amount Due:</span>
                <span class="value">KES {{ $data['total_amount'] ?? 'N/A' }}</span>
            </div>
        </div>

        <div class="footer">
            <p>Kenya Panel Lighting Company - Powering Your Future</p>
            <p>For customer service: +254 XXX XXX XXX | support@kplc.co.ke</p>
        </div>
    </div>
</body>

</html>
