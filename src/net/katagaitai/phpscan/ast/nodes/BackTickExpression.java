/*******************************************************************************
 * Copyright (c) 2009 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *     Zend Technologies
 *******************************************************************************/
package net.katagaitai.phpscan.ast.nodes;

import java.util.List;

import lombok.Getter;
import net.katagaitai.phpscan.ast.Visitor;

import com.google.common.collect.Lists;

/**
 * Represents back tick expression
 *
 * <pre>
 * e.g.
 *
 * <pre>
 * `.\exec.sh`
 */
public class BackTickExpression extends Expression {
	@Getter
	private List<Expression> expressions = Lists.newArrayList();

	public BackTickExpression(int start, int end, AST ast, Expression[] expressions) {
		super(start, end, ast);

		if (expressions == null) {
			throw new IllegalArgumentException();
		}
		for (Expression expression : expressions) {
			this.expressions.add(expression);
		}
	}

	public BackTickExpression(AST ast) {
		super(ast);
	}

	public BackTickExpression(int start, int end, AST ast, List<Expression> expressions) {
		this(start, end, ast,
				expressions == null ? null : (Expression[]) expressions.toArray(new Expression[expressions.size()]));
	}

	public void toString(StringBuffer buffer, String tab) {
		buffer.append(tab).append("<BackTickExpression"); //$NON-NLS-1$
		appendInterval(buffer);
		buffer.append(">\n"); //$NON-NLS-1$
		for (ASTNode node : this.expressions) {
			node.toString(buffer, TAB + tab);
			buffer.append("\n"); //$NON-NLS-1$
		}
		buffer.append(tab).append("</BackTickExpression>"); //$NON-NLS-1$
	}

	@Override
	public Object accept(Visitor visitor) {
		return visitor.visit(this);
	}

}
