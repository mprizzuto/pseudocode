# exercise: saying hello

## goal
create program that prompts user for name, and greets user with name

## inputs
name

## outputs
greeting and name

## pseudocode
- prompt for name and store in variable

- if user enters nothing, output error

- else, output "hello" string + name

**keep input, string concatenation, and output separate**

## tests
passing case
*what is your name?* Marco
**hello Marco**

failing case
*whats your name?* empty space
**error- required**

*whats your name?* non-sensical non-alaphabetic data i.e #$
**error- no foreign characters allowed**


******
# exercise: counting characters

## goal
counting the number of characters. output string and string length

## inputs
string

## outputs
string, string length

## pseudocode
- prompt for string, reference it with variable
- **use single outout statement to produce output**
- output error if field is empty or whitespace only

## tests
passing case
*what is the word?* word 
**the word is *word*, *word* has 4 characters**

failing case
*what is the word?* empty space 
**error- required**


******
# exercise: printing quotes

## goal
printing quotes. write a program that prompts for an author and quote. output the author and quote

## inputs
quote, author

## outputs
quote, author

## pseudocode 
- prompt for quote
- prompt for author
- use single output statement to output quote and author
- use string interpolation

## tests
passing case
*whats the quote?* to infinity and beyond
*who said it?* buzz lightyear
**the quote is "to infintiy and beyond", the author is buzz lightyear**

failing case
*whats the quote?* empty space
**error- required**

*whats the quote?* nonalphabetic data only, i.e #%^
**error- you only entered foreign characters, try again with a real quote!**

*whats the quote?* number(s) only i.e 3
**error- you only entered numbers, try again with a real quote!**


******
# exercise: madlibs

## goal
write a program that creates a madlib using a noun, verb, adjerb, and adjective. Include them in a string and make a story out of it

## inputs
noun, verb, adverb, adjective

## outputs
the noun, verb, adverb, and adjective injected into a story (string)

## pseudocode 
- initialize noun, verb, adverb, adjective and point the variabes to their respective form fields/inputs
- use singe utput statemnt + string interpolation


## tests
passing case
*whats a noun?* marco 
*whats a verb?* run
*whats a adverb?* always
*whats a adjective?* cute
**did marco always run cute? oh wow!**

failing case
*whats a noun?* empty space 
*whats a verb?* empty space
*whats a adverb?* empty space
*whats a adjective?* empty space
**error- required!**

*whats a noun?* non-alaphabetical data i.e !# 
*whats a verb?* !#
*whats a adverb?* !#
*whats a adjective?* !#
**error- only enter letters!**

*whats a noun?* numerical data i.e 3
*whats a verb?* 3
*whats a adverb?* 3
*whats a adjective?* 3
**error- only enter letters!** 

******
# exercise: simple math 

## goal
write a program that applies the four mathematical operations to 2 numbers.

## inputs
number one, number two

## outputs
numbers added, subtracted, multiplied, divided

## pseudocode 
- create variables for firstNum and secondNum
- typecast inputs from *strings* to *numbers*
- point them to their two respective inputs
- output error if divided by 0

## tests
passing case
*first number?* 2
*second number?* 4
**2 + 4 is 6**
**2 - 4 is -2**
**2 / 4 is .5**
**2 * 4 is 8**

failing case
*first number?* non-numerical data i.e S
*second number?* F
**error- numbers only**

*first number?* 2
*second number?* 0
**2 + 0 is 2**
**2 - 0 is 2**
**2 / 0 is *error, division by 0***
**2 * 0 is 0**
**error- you cant divide by 0**

*first number?* -2
*second number?* 4
**-2 + 4 is 6**
**-2 - 4 is -6**
**-2 / 4 is -5*
**-2 * 4 is -8**
**error- no negative numbers**


******
# exercise: retirement calculator

## goal
create a program that calculates how many years you have left until retirement, and the retirement age

## inputs
current age, retirement age

## outputs
years left to retire, current year, retirement year

## pseudocode
- create date variable and point it to current date using server

- create variables *yearsLeftToRetire*, *currentYear*, *retirementYear*, *currentAge*, *retirementAge*

- typecast inputs, *currentAge* and *retirementAge* to numbers

- **if user enters negative number,** output *you can already retire* 

- **if user enters non-valid data**, output appropriate error

- point *yearsLeftToRetire* to the result of subtracting *retirementYear* from *currentYear*

## tests
passing case
*What is your current age?* 34 
*At what age would you like to retire?* 45
**You have 11 years left until you can retire. It's 2022, so you can retire in 2033.**

failing case
*What is your current age?* non-numerical data i.e s
*At what age would you like to retire?* d
**error- numbers only, try again**

failing case
*What is your current age?* negative or zero number i.e 0 or -2
*At what age would you like to retire?*  -3
**you can already retire!**

*What is your current age?* empty space
*At what age would you like to retire?* empty space
**error- required**

<!-- 
******
## goal

## inputs

## outputs

## pseudocode 

## tests
	passing case
	** 
	****

	failing case
	** 
	****
-->
