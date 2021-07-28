import React, {useState} from 'react';
import './HeroSection.css';
import { Button } from './Button';
import { Link } from 'react-router-dom';

const  HeroSection = ({
  lightBg,
  imgStart,
  topLine,
  lightText,
  headline,
  description,
  lightTextDesc,
  buttonLabel,
  img,
  alt
})=> {

  return (
    <>
    <div
      className={lightBg ? 'home__hero-section' : 'home__hero-section darkBg'}
    >
      <div className='container'>
        <div
          className='home__hero-row'
          style={{
            display: 'flex',
            flexDirection: imgStart === 'start' ? 'row-reverse' : 'row'
          }}
        >
          <div className='col'>
            <div className='home__hero-text-wrapper'>
              <div className='top-line'>{topLine}</div>
              <h1 className={lightText ? 'heading' : 'heading dark'}>
                {headline}
              </h1>
              <p
                className={
                  lightTextDesc
                    ? 'home__hero-subtitle'
                    : 'home__hero-subtitle dark'
                }
              >
                {description}
              </p>
              <Link to='/api/users'> 
                <Button buttonSize='btn--wide' buttonColor='blue'>
                  {buttonLabel}
                </Button>
              </Link>
              
      
            </div>
          </div>

          <div className='col'>
            <div className='home__hero-img-wrapper'>
              <img src={img} alt={alt} className='home__hero-img' />
            </div>
          </div>
        </div>
      </div>
    </div>
  </>
);
}

export default HeroSection;

