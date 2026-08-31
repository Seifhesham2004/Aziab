<h2>New contact message</h2>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Subject:</strong> {{ $data['subject'] ?? 'General enquiry' }}</p>
<p><strong>Message:</strong></p>
<p>{!! nl2br(e($data['message'])) !!}</p>
<hr>
<p style="color:#888;font-size:12px">Sent from the aziab-seafaris.com contact form.</p>
