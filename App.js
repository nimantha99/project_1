import {useEffect, useState} from 'react';
import './App.css';



async function fetchProducts(){
  const response = await fetch('https://fakestoreapi.com/products');
  const products = await response.json();

  console.log(products);
  return products;
}



// const products =[
//   {
//     id:1,
//     title:"Backpack",
//     description:"A backpack with a laptop compartment" ,
//     price:"Rs. 5,000"
//   },
//   {
//     id:2,
//     title:"Water bottle",
//     description: "A 1-litre, plastic bottle",
//     price:"Rs. 1,500"
//   },
//   {
//     id:3,
//     title:"Shoes" ,
//     description:"A pair of runnig shoes",
//     price:"Rs. 3,000"
//   }
// ];



//Component name shoud start with a capital letter
function Product({title, description, price, onAdd}){

  return (
    <div className='product'>
      <h2>{title}</h2>
      <p>{description}</p>
      <p>{price}</p>
      <button type="button" onClick={onAdd}>Add to cart</button>
    </div>
  );
}

function App() {
  const [cart, setCart] =useState([]);
  const [products, setProducts] =useState([]);


  useEffect(() =>{  
    async function initialize(){
      const data = await fetchProducts();
      setProducts(data)
    }
    initialize();
  },[]); 

  return (
    <div className="App">
      {
        products.map(({id, title, description, price}) =>(
          <Product 
            key={id}
            title={title}
            description={description} 
            price={price} 
            onAdd={() => 
              setCart((cart) => [...cart, {id, title, description, price}])}
          />
        )) 
      } 
      <div>
        <p>Number of items in the cart: {cart.length}</p>
        {
          cart.map(({id, title}) =>(
            <div key={id}>{title} </div>
          )) 
        }
      </div>
       
      
    </div>
  );
}

export default App;
