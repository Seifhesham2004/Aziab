<h2>New booking request</h2>
<p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] ?? '—' }}</p>
<p><strong>Guests:</strong> {{ $data['guests'] ?? '—' }}</p>
<p><strong>Preferred date:</strong> {{ $data['date'] ?? '—' }}</p>
<p><strong>Trip details:</strong></p>
<p>{!! nl2br(e($data['message'])) !!}</p>
<hr>
<p style="color:#888;font-size:12px">Sent from the aziab-seafaris.com booking form.</p>
