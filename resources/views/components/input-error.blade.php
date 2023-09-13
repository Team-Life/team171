@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'custom_message_position']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
