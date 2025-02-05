import React, { useState } from "react";

const PriceCalculator = () => {
  const [price, setPrice] = useState(0);
  const [quantity, setQuantity] = useState(1);
  const [discount, setDiscount] = useState(0);

  const calculateTotal = () => {
    const subtotal = price * quantity;
    const discountAmount = (subtotal * discount) / 100;
    return subtotal - discountAmount;
  };

  return (
    <div>
      <h2>Price Calculator</h2>
      <div>
        <label>Price per Item: </label>
        <input
          type="number"
          value={price}
          onChange={(e) => setPrice(parseFloat(e.target.value) || 0)}
        />
      </div>
      <div>
        <label>Quantity: </label>
        <input
          type="number"
          value={quantity}
          onChange={(e) => setQuantity(parseInt(e.target.value) || 1)}
        />
      </div>
      <div>
        <label>Discount (%): </label>
        <input
          type="number"
          value={discount}
          onChange={(e) => setDiscount(parseFloat(e.target.value) || 0)}
        />
      </div>
      <h3>Total: ${calculateTotal().toFixed(2)}</h3>
    </div>
  );
};

export default function App() {
  return (
    <div>
      <PriceCalculator />
    </div>
  );
}
