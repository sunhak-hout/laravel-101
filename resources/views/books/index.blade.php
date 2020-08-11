<style>
  table {
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 0px 6px;
  }
</style>

<h1>This is Book List</h1>

<form>
  <input type="text" value="{{ $search }}" name="search" placeholder="Search by title..." />
  <button type="submit">Search</button>
</form>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Price</th>
      <th>Description</th>
      <th>Created At</th>
      <th>Updated At</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->created_at }}</td>
        <td>{{ $book->updated_at }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

<div>
  <a href="/books/create">Create new book</a>
</div>