let convertToSlug = str => str.trim()
     .toLowerCase()
     .normalize("NFD")
     .replace(/\s+/g, '-')
     .replace(/[\u0300-\u036f]/g, "");
