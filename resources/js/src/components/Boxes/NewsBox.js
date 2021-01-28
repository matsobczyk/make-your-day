import React from 'react'
import PropTypes from 'prop-types'
import {useState, useEffect } from 'react'



const NewsBox = (props) => {

    const [news1, setNews1] = useState(null)
    const [news2, setNews2] = useState(null)
    const [news3, setNews3] = useState(null)
    const [news1link, setNews1link] = useState(null)
    const [news2link, setNews2link] = useState(null)
    const [news3link, setNews3link] = useState(null)

    useEffect(() => {
        fetch('http://127.0.0.1:8000/news'
        )
          .then(res => {
            return res.json();
          })
          .then(data => {
            setNews1(data.articles[0].title)
            setNews2(data.articles[1].title)
            setNews3(data.articles[2].title)
            setNews1link(data.articles[0].url)
            setNews2link(data.articles[1].url)
            setNews3link(data.articles[2].url)
            console.log(data.articles[0])
          })
      }, [])




    return (
        <div className='box big shadow'>
            <h1>News</h1>
            <a style={myStyle} href={news1link}>
                <div className='newsBox shadow'>
                    {news1}
                </div>
            </a>
            <a style={myStyle} href={news2link}>
                <div className='newsBox shadow'>
                    {news2}
                </div>
            </a>
            <a style={myStyle} href={news3link}>
                <div className='newsBox shadow'>
                    {news3}
                </div>
            </a>
            
        </div>
    )
}

const myStyle = {
    color: 'white',
    textDecoration: 'none',
    pointerEvents: 'none',
}

export default NewsBox
