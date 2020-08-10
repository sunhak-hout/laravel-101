<h2>Create New Book</h2>

<form action="/books" method="POST">
  @csrf
  <div>
    <label>Book Title</label>
    <input type="text" name="title" />
  </div>
  <div>
    <label>Price</label>
    <input type="number" name="price" />
  </div>
  <button type="submit">Create</button>
</form>