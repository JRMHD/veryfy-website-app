<!DOCTYPE html>
<html>

<head>
    <title>Power Bill - Kenya Panel Lighting Company</title>
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
            position: relative;
            /* Ensure watermark stays relative to the body */
        }

        .watermark {
            position: absolute;
            /* Ensures watermark is placed behind the content */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 70px;
            color: rgba(0, 0, 0, 0.1);
            /* Light gray color for watermark */
            font-weight: bold;
            text-align: center;
            z-index: -1;
            /* Watermark stays behind content */
            pointer-events: none;
            /* Prevent watermark from interfering with interactions */
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
    <!-- Watermark -->
    @if (isset($watermark))
        <div class="watermark">{{ $watermark }}</div>
    @endif
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
