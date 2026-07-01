<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>New Appointment</title></head>
<body style="font-family: Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
<div style="background: #0A3D6B; padding: 20px; border-radius: 8px 8px 0 0;">
    <h2 style="color: white; margin: 0;">New Appointment Request</h2>
    <p style="color: #93c5fd; margin: 5px 0 0;">Bilal Hospital</p>
</div>
<div style="background: #f8fafc; padding: 24px; border: 1px solid #e2e8f0; border-top: none; border-radius: 0 0 8px 8px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr><td style="padding: 8px 0; font-weight: bold; width: 160px;">Patient Name:</td><td style="padding: 8px 0;">{{ $appointment->patient_name }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Phone:</td><td style="padding: 8px 0;">{{ $appointment->phone }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Email:</td><td style="padding: 8px 0;">{{ $appointment->email ?? 'N/A' }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Department:</td><td style="padding: 8px 0;">{{ $appointment->department?->name ?? 'N/A' }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Doctor:</td><td style="padding: 8px 0;">{{ $appointment->doctor?->name ?? 'Any' }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Preferred Date:</td><td style="padding: 8px 0;">{{ $appointment->preferred_date?->format('d M Y') }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Preferred Time:</td><td style="padding: 8px 0;">{{ $appointment->preferred_time }}</td></tr>
        @if($appointment->message)<tr><td style="padding: 8px 0; font-weight: bold; vertical-align: top;">Message:</td><td style="padding: 8px 0;">{{ $appointment->message }}</td></tr>@endif
    </table>
    <p style="color: #64748b; font-size: 12px; margin-top: 20px; border-top: 1px solid #e2e8f0; padding-top: 16px;">This is an automated notification from Bilal Hospital appointment system.</p>
</div>
</body>
</html>
