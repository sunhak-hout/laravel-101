<h2>Create New Book</h2>

<form action="/books" method="POST">
  @csrf
  <div>
    <label>Book Title</label>
    <input type="text" name="title" />
  </div>
  <div>
    <label>Author Name</label>
    <input type="text" name="author" />
  </div>
  <div>
    <label>Description</label>
    <textarea type="text" name="description"></textarea>
  </div>
  <div>
    <label>Price</label>
    <input type="number" step="0.01" name="price" />
  </div>
  <button type="submit">Create</button>
</form>