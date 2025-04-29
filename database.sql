-- Create 'labelle_shop' database
CREATE DATABASE IF NOT EXISTS labelle_shop;
USE labelle_shop;

-- Users table (for login)
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

-- Products table
CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  category VARCHAR(50),
  price DECIMAL(10,2),
  description TEXT,
  image_url VARCHAR(255)
);

-- Sample Products
INSERT INTO products (name, category, price, description, image_url) VALUES
-- Cosmetics (10)
('Velvet Matte Lipstick', 'cosmetics', 15.99, 'Smooth, bold color for all-day wear.', 'https://images.pexels.com/photos/6527701/pexels-photo-6527701.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Glow Foundation', 'cosmetics', 22.50, 'Natural look with long-lasting coverage.', 'https://images.pexels.com/photos/16764276/pexels-photo-16764276/free-photo-of-close-up-of-powder-cosmetic.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Waterproof Mascara', 'cosmetics', 13.99, 'Lift, lengthen and define lashes.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3Li2tJmNsmMbvsSKJm_SMv3V1txuxxH46PQ&s'),
('Blush & Glow Palette', 'cosmetics', 18.75, 'Add color and radiance to your cheeks.', 'https://images.pexels.com/photos/26093503/pexels-photo-26093503/free-photo-of-woman-holding-makeup-palette.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Ultra Brow Kit', 'cosmetics', 11.99, 'Shape, fill and define your brows.', 'https://images.pexels.com/photos/13534390/pexels-photo-13534390.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Hydra Lip Gloss', 'cosmetics', 9.99, 'High-shine moisturizing gloss.', 'https://images.pexels.com/photos/14438172/pexels-photo-14438172.jpeg?auto=compress&cs=tinysrgb&w=400'),
('HD Compact Powder', 'cosmetics', 17.00, 'Even complexion with silky finish.', 'https://images.pexels.com/photos/2600761/pexels-photo-2600761.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Eye Shadow Palette', 'cosmetics', 21.90, 'Vibrant colors for every look.', 'https://images.pexels.com/photos/30634963/pexels-photo-30634963/free-photo-of-luxury-eye-shadow-palette-on-red-background.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Nude Nail Polish Set', 'cosmetics', 12.50, 'Neutral tones for a classic style.', 'https://m.media-amazon.com/images/I/71+Mt5Ss8zL.jpg'),
('Makeup Brush Set', 'cosmetics', 29.99, 'Soft bristles, pro-quality tools.', 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWFrZXVwJTIwYnJ1c2h8ZW58MHx8MHx8fDA%3D'),

-- Shoes (10)
('Elegant Stiletto Heels', 'shoes', 49.99, 'Perfect heels for evening occasions.', 'https://images.pexels.com/photos/27565822/pexels-photo-27565822/free-photo-of-stilettos-natural.png?auto=compress&cs=tinysrgb&w=400'),
('Comfort Sneakers', 'shoes', 39.99, 'Trendy sneakers with ultimate comfort.', 'https://images.pexels.com/photos/13790634/pexels-photo-13790634.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Leather Loafers', 'shoes', 44.95, 'Classic everyday shoes for women.', 'https://images.pexels.com/photos/27035624/pexels-photo-27035624/free-photo-of-close-up-of-a-woman-wearing-black-moccasins.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Men’s Running Shoes', 'shoes', 59.50, 'Performance and style in every step.', 'https://5.imimg.com/data5/YC/GV/XN/ANDROID-83761084/product-jpeg-500x500.jpg'),
('Kids Canvas Shoes', 'shoes', 24.99, 'Durable and colorful for kids.', 'https://www.converse.com/dw/image/v2/BCZC_PRD/on/demandware.static/-/Sites-cnv-master-catalog/default/dwa0d2112b/images/d_08/A11832C_D_08X1.jpg?sw=406'),
('Platform Boots', 'shoes', 54.99, 'Bold and trendy fashion statement.', 'https://www.shutterstock.com/image-photo/women-wearing-trendy-ankle-boots-600nw-1883525737.jpg'),
('Ladies Sandals', 'shoes', 28.00, 'Breezy and beautiful for summer.', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS0-IFvsVzyXphTJnlPUjgFJKoljr2P2jAsTgM7xCpbz1MI4lgoedbsEimtY0pfNKlxajYcGcO88-qAVjxW8-0cMvEmYLflrocrV14wLeNC&usqp=CAc'),
('Formal Men’s Shoes', 'shoes', 62.00, 'Elegant office wear.So lovely', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSKuzARlJXk3-1cHhw7EH8r4q-ia-J9ROh0be2N8ttrSdxpuxKpCDbLEpC9Jd6CrjSnHhBoeAOvA_MmQ8DBAMuUtEEFEWqMtH19lZEO0CSNiVXot9G_ty9B&usqp=CAc'),
('Slip-On Flats', 'shoes', 19.90, 'Easy comfort for everyday wear.', 'https://i.pinimg.com/736x/36/5d/47/365d4722791e5ad337bb4b748c888a1e.jpg'),
('Velcro Kids Trainers', 'shoes', 21.50, 'Supportive and safe.', 'https://calvinklein-eu.scene7.com/is/image/CalvinKleinEU/EFCK080782_134_main?$b2c_updp_m_mainImage_1920$'),

-- Bags (10)
('Leather Handbag', 'bags', 39.99, 'Stylish and spacious leather handbag.', 'https://images.pexels.com/photos/8365688/pexels-photo-8365688.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Mini Crossbody Bag', 'bags', 19.99, 'Lightweight and trendy.', 'https://images.pexels.com/photos/8801089/pexels-photo-8801089.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Office Tote Bag', 'bags', 32.50, 'Professional and practical.', 'https://images.pexels.com/photos/18601494/pexels-photo-18601494/free-photo-of-woman-holding-a-black-bag.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Men’s Messenger Bag', 'bags', 45.00, 'Classic and functional.', 'https://www.rummagestudio.com/cdn/shop/files/RummageStudio_0041s_0001_RummageMarch-69.jpg?v=1683881908&width=360'),
('Floral Backpack', 'bags', 28.75, 'Fun and spacious for everyday use.', 'https://image.made-in-china.com/2f0j00WpAcmBVRnbgG/Ru-3-in-1-Floral-Backpack-for-Girls-Students-Rucksack-with-Lunch-Bag-and-Pencil-Bag-for-Teenager.webp'),
('Studded Sling Bag', 'bags', 27.25, 'Adds edge to any outfit.', 'https://images.pexels.com/photos/14805016/pexels-photo-14805016.jpeg?auto=compress&cs=tinysrgb&w=400'),
('Transparent Handbag', 'bags', 24.99, 'Modern clear fashion.', 'https://i.pinimg.com/236x/05/6d/ec/056dec7392d234c7d5b1cec54acef122.jpg'),
('Laptop Backpack', 'bags', 35.99, 'Tech meets style.', 'https://isiro.ca/cdn/shop/collections/dreamstime_m_58999246_1bdf4e74-a6e6-4fc8-b909-380a88fa8930.webp?v=1720380410&width=750'),
('Kids Cartoon Backpack', 'bags', 18.95, 'Perfect for school and fun.', 'https://images-na.ssl-images-amazon.com/images/I/41n+qtGMs7L._UL500_.jpg'),
('Woven Straw Tote', 'bags', 22.00, 'Casual and earthy style.', 'https://m.media-amazon.com/images/I/71MqN+qN7ZL._AC_UY1000_.jpg'),

-- Lotions (10)
('Aloe Vera Lotion', 'lotions', 12.99, 'Natural aloe vera moisturizer for smooth skin.', 'https://www.healthyu.co.ke/wp-content/uploads/2020/03/OPTIMA-ALOE-VERA-LOTION-ORG-200ML-768x768.jpg'),
('Cocoa Butter Cream', 'lotions', 10.50, 'For nourishing and hydrating.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOh2nfEKeQK_1YG86-V9wXS14Zi27cs0qEGQ&s'),
('Lavender Body Milk', 'lotions', 14.25, 'Soothing and relaxing formula.', 'https://fourthraybeauty.com/cdn/shop/products/BodyMilk_Lavendar_C3_138_1200x1200.jpg?v=1620771933'),
('Aftershave Lotion', 'lotions', 16.00, 'Refreshes and calms post-shave skin.', 'https://static.beautytocare.com/media/catalog/product/n/i/nivea-men-protect-care-after-shave-lotion-100ml.jpg'),
('Moisturizer Lotion', 'lotions', 9.95, 'Gentle and effective for delicate skin.', 'https://m.media-amazon.com/images/I/61cuz8DN8DL._AC_UF894,1000_QL80_.jpg'),
('Vitamin C Brightening Cream', 'lotions', 19.50, 'For radiant and ensuring the skin is even.', 'https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/27/6318611/1.jpg?5994'),
('Whitening Night Cream', 'lotions', 23.00, 'Targets blemishes overnight.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWs5QCpnzDI6gAJaezKWIO4YwWgoWdFWqsGA&s'),
('Sands SPF 50+ Sun Lotion', 'lotions', 15.00, 'Protects and nourishes. It is amaizing', 'https://dreamskinhaven.co.ke/wp-content/uploads/2021/11/BS-SPF-50_-BODY-SUNSCREEN-TUBE-FRAGRANCE-FREE-LIFESTYLE-2_2000x.jpg'),
('Shea Butter Body Balm', 'lotions', 13.99, 'Rich and ultra-moisturizing. Try it and see', 'https://german-drugstore.com/wp-content/uploads/2023/01/balea-body-cream-shea-butter-2.webp'),
('Intensive Hand Repair Cream', 'lotions', 7.99, 'Softens and soothes hands.', 'https://plunketts.com.au/cdn/shop/files/NSWH01_2023_Intensive-Hands_150g__Front__WEB_1024x.png?v=1685593637'),

-- Perfumes (5)
('Romance Eau de Parfum', 'perfumes', 55.99, 'Sweet and sensual floral scent.', 'https://i0.wp.com/assets.beautyhub.co.ke/wp-content/uploads/2024/10/24134856/rasasi-romance-eau-de-parfum-for-women-45ml-2.jpg?fit=1150%2C1150&ssl=1'),
('Ocean Breeze Cologne', 'perfumes', 48.00, 'Fresh aquatic scent for men.', 'https://cdn11.bigcommerce.com/s-iidkspuzbf/images/stencil/1280x1280/products/379/643/IMG_6848__92987.1725395693.jpg?c=1'),
('Mystic Oud Fragrance and Art', 'perfumes', 69.50, 'Bold and luxurious oriental fragrance.', 'https://fragrancesandart.com/images/normal/mysticoud.jpg'),
('Vanilla Mist Spray Unisex', 'perfumes', 34.25, 'Warm and comforting vanilla scent.', 'https://images-na.ssl-images-amazon.com/images/I/71rJ9C4HDGL._UL500_.jpg'),
('Kids Bubble Gum Scent', 'perfumes', 19.99, 'Safe, fun scent for kids.', 'https://m.media-amazon.com/images/I/A1qhfn00PWL._AC_UF350,350_QL80_.jpg'),

-- Fashion (5)
('Chic Men’s Blazer', 'fashion_men', 59.99, 'Formal wear for men, sleek and fitted.', 'https://www.dhresource.com/webp/m/0x0/f2/albu/g20/M01/BD/D5/rBVaqWCtdJuAb4JRAAEHkzHb3dY515.jpg'),
('Classic White Shirt', 'fashion_men', 25.00, 'Versatile and timeless. Fashionabe', 'https://shapingnewtomorrow.com/cdn/shop/files/ClassicShirt_White_1_5cd5bf10-af18-4d0b-a477-bc3422d8401a.jpg?v=1729522712'),
('Floral Kids Dress', 'fashion_kids', 29.99, 'Colorful and comfortable for any occasion.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0LKmHkf5O881KMnJXskJunIXSA-j_DiZ06w&s'),
('Boys Denim Jacket', 'fashion_kids', 34.50, 'Cool and durable. Very Fashionable', 'https://rukminim3.flixcart.com/image/850/1000/xif0q/jacket/w/w/e/7-8-years-no-215150-maktelpro-original-imaguehgh96zch5z.jpeg?q=90&crop=false'),
('Ladies Maxi Dress', 'fashion_ladies', 42.75, 'Flowy and flattering for all body types.', 'https://shopzetu.com/cdn/shop/files/XDx8TT4tqs_360x.jpg?v=1718084385');
