/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*"],
  theme: {
    extend: {
   
      
      fontFamily: {

        fjalla:["Fjalla One", "sans-serif"],
        Dosis:[ "Dosis" , "sans-serif"]


      },
        
      
 
      animation: {
        'loop-scroll': 'loop-scroll  38s linear infinite',
      },
 
      keyframes: {
        'loop-scroll': {
          from: { transform: 'translateX(0)' },
          to: { transform: 'translateX(-100%)' },
        },

    },


    },
  },
  plugins: [],
}

