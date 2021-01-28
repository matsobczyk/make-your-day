import './App.css'
import Header from './components/Header'
import NewsBox from './components/Boxes/NewsBox'
import WeatherBox from './components/Boxes/WeatherBox'
import NoteBox from './components/Boxes/NoteBox'
import QuoteBox from './components/Boxes/QuoteBox'
import TimeBox from './components/Boxes/TimeBox'
import TodoBox from './components/Boxes/TodoBox'





function App() {
  return (
    <div className="app">
      <Header />
      <div className='containerApp'>
        <div className='column'>
        <WeatherBox />
        <NewsBox />
        </div>
        <div className='column'>
        <TodoBox />
        <QuoteBox />
        </div>
        <div className='column'>
        <TimeBox />
        <NoteBox />
        </div>

      </div>
    </div>
  );
}

export default App;
