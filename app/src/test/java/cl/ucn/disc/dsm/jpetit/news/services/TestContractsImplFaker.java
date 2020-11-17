/*
 * Copyright (c) 2020 Jhorham Petit-Mostafa,jhorham.petit@alumnos.ucn.cl
 *
 * Copyright <YEAR> <COPYRIGHT HOLDER>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

package cl.ucn.disc.dsm.jpetit.news.services;

import com.github.javafaker.Faker;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.threeten.bp.ZoneId;
import org.threeten.bp.ZonedDateTime;

import java.util.List;

import cl.ucn.disc.dsm.jpetit.news.model.News;


/**
 * Testing of ContractImpl.
 * @author Jhorham Petit-Mostafa
 */
public final class TestContractsImplFaker {
    /**
     * the logger.
     */
    private static final Logger log = LoggerFactory.getLogger(TestContractsImplFaker.class);

    /**
     * The Test of Retrieve news.
     */
    @Test
    public void testRetrieveNews(){
        log.debug("Testing...");
        // The concrete implementation
        Contracts contracts = new ContractsImplFaker();
        // call the method..
        List<News> news = contracts.retrieveNews(5);
        // .. the list can't be null..
        Assertions.assertNotNull(news, "List was null :(");
        // .. the list can't be empty..
        Assertions.assertFalse(news.isEmpty(), "Empty list? :(" );
        // .. the size(list) = 5 ..
        Assertions.assertEquals(5,news.size(), "list size != 5 :(");
        // debug to log
        for (News n : news){
            log.debug("news: {}", n);
        }
        //size = 0
        Assertions.assertEquals(0,contracts.retrieveNews(0).size(),"List != 0");
        //size=3
        Assertions.assertEquals(3, contracts.retrieveNews(3).size(), "List != 3");
        //size=10
        Assertions.assertTrue(contracts.retrieveNews(10).size() <= 10, "List != 10");

        log.debug("Done.");
    }

    /**
     * the testSaveNews
     */
    @Test
    public void testSaveNews(){

        log.debug("testing...");
        //the contractsImplFaker
        Contracts contracts = new ContractsImplFaker();
        //create new faker
        Faker faker = Faker.instance();
        // The new attributes
        for(int i = 0; i < 5 ; i++) {
           Long id = Integer.toUnsignedLong(i);
           String title = faker.book().title();
           String source = faker.name().username();
           String author = faker.name().fullName();
           String url = faker.internet().url();
           String urlImage = faker.internet().avatar();
           String description = faker.harryPotter().quote();
           String content = faker.lorem().paragraph(3);
           ZonedDateTime publishedAt = org.threeten.bp.ZonedDateTime.now(ZoneId.of("-3"));

           //Instance the testNew
           News testNew = new News(id, title, source, author, url, urlImage, description, content, publishedAt);
           //save the testNew into the contracts
           contracts.saveNews(testNew);
           //testing if the New is not null
           Assertions.assertNotNull(testNew);
           //get its size test it to be initial size + 1
           Assertions.assertEquals(6, contracts.retrieveNews(5 + 1).size(), "size is not 6");
       }
        log.debug("Done.");

    }
}







