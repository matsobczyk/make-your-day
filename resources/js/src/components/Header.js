import PropTypes from 'prop-types'

const Header = (param) => {
    return (
        <header className='header'> 
            <h1>{param.title}</h1>
        </header>
    )
}

Header.defaultProps = {
    title: 'Hello, user',
}

Header.propTypes = {
    title: PropTypes.string,
}

export default Header



