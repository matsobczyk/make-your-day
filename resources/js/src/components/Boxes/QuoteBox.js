import React from 'react'
import {useState, useEffect } from 'react'





const QuoteBox = () => {

    const [quote, setQuote] = useState(null)
    const [author, setAuthor] = useState(null)

    useEffect(() => {
        fetch('http://127.0.0.1:8000/quote'
        )
          .then(res => {
            return res.json();
          })
          .then(data => {
            setQuote(data[0].text);
            setAuthor(data[0].author)
            console.log(data[0])
          })
      }, [])



    return (
        <div className='box small shadow'>
            <div className='quoteBox shadow'>
                <p>{quote}</p>
                <p>{author}</p>
            </div>
        </div>
    )
}

export default QuoteBox
