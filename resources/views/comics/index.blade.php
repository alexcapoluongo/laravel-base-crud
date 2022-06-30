<h1>Lista dei fumetti</h1>
    <ul>
        @foreach ($comics_list as $comic)
            <li>
                <h3>
                        {{ $comics->title }}
                </h3>
            </li>
        @endforeach
    </ul>