let convertToSlug = (str, uniqid = false) => {
     // Chuyển sang dạng unicode tổ hợp
     str = str.normalize("NFD").toLowerCase();
     // Chuyển đ -> d
     str = str.replace(/[đĐ]/g, m => m === 'đ' ? 'd' : 'D');
     // Xóa các ký tự dấu sau khi tách tổ hợp
     str = str.replace(/[\u0300-\u036f]/g, '');
     // Bỏ ký tự đặc biệt
     str = str.replace(/([^0-9a-z-\s])/g, '');
     // Chuyen nhiều dấu - (-------------) thành -
     str = str.replace(/-+/g, '-')
     // Chuyển nhiều khoảng trắng (              ) thành -
     str = str.replace(/\s+/g, '-')
     // Bỏ tất cả dấu - ở đầu và cuối
     str = str.replace(/^-+|-+$/g, '');
     return `${str}${uniqid ? '-' + Date.now() : ''}`;
}
