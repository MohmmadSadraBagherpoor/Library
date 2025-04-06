<!DOCTYPE html>
<html>
<head>
    <title>کتاب‌های دسته {{ $category->name }}</title>
</head>
<body>
<h1>📚 کتاب‌های دسته "{{ $category->name }}"</h1>

@if($books->count())
    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> —
                نویسنده: {{ $book->author->name ?? 'نامشخص' }}
            </li>
        @endforeach
    </ul>
@else
    <p>هیچ کتابی در این دسته وجود ندارد.</p>
@endif

<a href="/books">بازگشت به لیست کتاب‌ها</a>
</body>
</html>
