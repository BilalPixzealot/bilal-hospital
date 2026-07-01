<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>New Contact Message</title></head>
<body style="font-family: Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
<div style="background: #0A3D6B; padding: 20px; border-radius: 8px 8px 0 0;">
    <h2 style="color: white; margin: 0;">New Contact Message</h2>
    <p style="color: #93c5fd; margin: 5px 0 0;">Bilal Hospital</p>
</div>
<div style="background: #f8fafc; padding: 24px; border: 1px solid #e2e8f0; border-top: none; border-radius: 0 0 8px 8px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr><td style="padding: 8px 0; font-weight: bold; width: 100px;">Name:</td><td style="padding: 8px 0;">{{ $contact->name }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Phone:</td><td style="padding: 8px 0;">{{ $contact->phone }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Email:</td><td style="padding: 8px 0;">{{ $contact->email ?? 'N/A' }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold;">Subject:</td><td style="padding: 8px 0;">{{ $contact->subject ?? 'N/A' }}</td></tr>
        <tr><td style="padding: 8px 0; font-weight: bold; vertical-align: top;">Message:</td><td style="padding: 8px 0;">{{ $contact->message }}</td></tr>
    </table>
</div>
</body>
</html>
