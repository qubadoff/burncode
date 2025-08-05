<h2>New Contact Message</h2>

<p><strong>Name:</strong> {{ $data['name'] ?? '-' }}</p>
<p><strong>Surname:</strong> {{ $data['surname'] ?? '-' }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? '-' }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] ?? '-' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['body'] ?? '-' }}</p>
