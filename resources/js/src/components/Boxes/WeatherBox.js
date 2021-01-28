import React from 'react'
import {useState, useEffect } from 'react'
import PropTypes from 'prop-types'
import { data } from 'jquery'

const WeatherBox = (params) => {

    const [weather, setWeather] = useState(null)
    const [city, setCity] = useState(null)
    const [clouds, setClouds] = useState(null)
    const [temp, setTemp] = useState(null)
    const [humidity, setHumidity] = useState(null)
    const [wind, setWind] = useState(null)

    useEffect(() => {
      fetch('http://127.0.0.1:8000/weather'
      )
        .then(res => {
          return res.json();
        })
        .then(data => {
          setCity(data.name);
          setClouds(data.clouds.all)
          setTemp(data.main.temp)
          setHumidity(data.main.humidity)
          setWind(data.wind.speed)
          console.log(data.wind.speed)
          console.log(data)
        })
    }, [])


    return (
        <div className='box small shadow'>
            <h3>{city}</h3>
            <div className='rowApp'>
            <div className='column'>
              <div className='weatherIconBox shadow'>
                  <h1>{(temp-273.15).toFixed(1) + '°C'}</h1>
              </div>
              
            </div>
            <div className='column weatherclass'>
                <p>Clouds:{clouds}%</p>
                <p>Humidity: {humidity} %</p>
                <p>Wind: {wind} km/h</p>
              </div>
            </div>
            
        </div>
    )
}

WeatherBox.defaultProps = {
    rain: '',
}
WeatherBox.propTypes = {
    rain: Number,
}

export default WeatherBox
