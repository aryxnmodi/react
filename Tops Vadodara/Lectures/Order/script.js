const movies = {
    Bollywood: [
      "3 Idiots",
      "Baby John",
      "Wanted",
      "Lagaan",
      "KGF"
    ],
    Hollywood: [
      "Inception",
      "The Dark Knight",
      "Titanic",
      "Dedpool",
      "Nightmare on elm street"
    ]
  };
  
  const createMovieList = (movies) => {
    const container = document.createElement("div");
  
    Object.keys(movies).forEach((category) => {
      const categoryHeader = document.createElement("h2");
      categoryHeader.textContent = category;
      container.appendChild(categoryHeader);
  
     
      const movieList = document.createElement("ol");
  
      movies[category].forEach((movie) => {
        const listItem = document.createElement("li");
        listItem.textContent = movie;
        movieList.appendChild(listItem);
      });
  
      container.appendChild(movieList);
    });
  
    return container;
  };
  
  document.addEventListener("DOMContentLoaded", () => {
    const movieListContainer = createMovieList(movies);
    document.body.appendChild(movieListContainer);
  });
  